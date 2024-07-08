<?php

namespace webburospring\SendCloud\Query;

use webburospring\SendCloud\Connection;
use webburospring\SendCloud\Model;

/**
 * Trait FindOne
 *
 * @method Connection connection()
 *
 * @package webburospring\SendCloud\Persistance
 */
trait FindOne
{

    /**
     * @param $id
     * @return Model|FindOne
     */
    public function find($id)
    {
        $result = $this->connection()->get($this->url . '/' . urlencode($id));

        if ( ! array_key_exists($this->namespaces['singular'], $result)) {
            return null;
        }

        return new self($this->connection(), $result[$this->namespaces['singular']]);
    }

}
