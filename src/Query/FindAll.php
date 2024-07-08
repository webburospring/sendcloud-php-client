<?php

namespace webburospring\SendCloud\Query;

use webburospring\SendCloud\Connection;

/**
 * Trait FindAll
 *
 * @method Connection connection()
 *
 * @package webburospring\SendCloud\Persistance
 */
trait FindAll
{

    public function all($params = [])
    {
        $result = $this->connection()->get($this->url, $params);

        return $this->collectionFromResult($result);
    }

    public function collectionFromResult($result)
    {
        $collection = [];

        $resultsContainer = $result;
        if (isset($result[$this->namespaces['plural']])) {
            $resultsContainer = $result[$this->namespaces['plural']];
        }

        foreach ($resultsContainer as $item) {
            $collection[] = new self($this->connection(), $item);
        }

        return $collection;
    }

}
