<?php

namespace App\Console\Commands;
use App\Models\Product;
use Illuminate\Console\Command;

class GetProductCategorySymbolCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:category {id : The ID of the product}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the symbol code of the category for a product with a given ID';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $product = Product::find($this->argument('id'));

        if (!$product) {
            throw new InvalidArgumentException("Product with ID {$this->argument('id')} not found");
        }

        $category = $product->category;

        if (!$category) {
            throw new RuntimeException("Product with ID {$this->argument('id')} has no category");
        }

        $this->info("Symbol code of the category for product {$product->name} (ID: {$product->id}): {$category->symbol_code}");
    }
}
