<?php
namespace Kroscom\OneRosterAPI\Client\Components;

use Traversable;
use ArrayIterator;
use JsonSerializable;
use IteratorAggregate;
use Kroscom\OneRosterAPI\Client\Exceptions\ClientException;

abstract class BaseComponent implements JsonSerializable, IteratorAggregate
{
    /** @var array<string, class-string|string> $fields */
    protected static array $fields = [];

    /**
     * JSON array of object data
     *
     * @var array<string, mixed> $data
     */
    protected array $data;

    /**
     * Construct from a JSON object response value from the SKY API
     *
     * @param array<string, mixed> $data
     *
     * @api
     */
    public function __construct(array $data)
    {
        if(isset(static::$collectionKey)) {
            $this->data = $data[static::$collectionKey];

            /** @var class-string $type */
            $type = preg_replace("/(.+)\\[\\]$/", "$1", static::$collectionModel);
            $this->data = array_map(
                fn($elt) => new $type($elt),
                $this->data
            );
        } else {
            $this->data = $data;
            foreach (static::$fields as $property => $type) {
                if (str_contains($type, '\\')) {
                    /** @var class-string $type */
                    if (str_contains($type, '[]')) {
                        assert(
                            is_array($this->data[$property]),
                            new ClientException(
                                "`$property` declared as array ($type)"
                            )
                        );
                        /** @var class-string $type */
                        $type = preg_replace("/(.+)\\[\\]$/", "$1", $type);
                        $this->data[$property] = array_map(
                            fn($elt) => new $type($elt),
                            $this->data[$property]
                        );
                    } else {
                        $this->data[$property] = new $type($this->data[$property]);
                    }
                }
            }
        }

    }

    /**
     * @param string $name
     * @return mixed
     * @api
     */
    public function __get(string $name): mixed
    {
        if (array_key_exists($name, static::$fields)) {
            if (array_key_exists($name, $this->data)) {
                return $this->data[$name];
            } else {
                return null;
            }
        }
        trigger_error(
            'Undefined property: ' . static::class . "::$name",
            E_USER_WARNING
        );
        return null;
    }

    /**
     * @return mixed
     * @api
     */
    public function jsonSerialize(): mixed
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->jsonSerialize());
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * @return Traversable
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->data);
    }
}
