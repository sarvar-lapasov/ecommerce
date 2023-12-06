<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Stock;

class StockRepository extends Repository
{
    public function subtractFormStock(array $products): void
    {
        foreach ($products as $product) {
            $stock = Stock::find($product['inventory'][0]['id']);
            $stock->quantity -= $product['order_quantity'];
            $stock->save();
        }
    }

}
