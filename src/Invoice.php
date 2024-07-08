<?php

namespace webburospring\SendCloud;

/**
 * Class Invoice
 *
 * @property integer $id
 * @property string $description
 * @property float $price_excl
 * @property float $price_incl
 * @property string $date
 * @property boolean $isPayed
 * @property string $items
 *
 * @package webburospring\SendCloud
 */
class Invoice extends Model
{
    use Query\FindAll;

    protected $fillable = [
        'id',
        'description',
        'price_excl',
        'price_incl',
        'date',
        'isPayed',
        'items'
    ];

    protected $url = 'invoices';

    protected $namespaces = [
        'singular' => 'invoice',
        'plural' => 'invoices'
    ];

}
