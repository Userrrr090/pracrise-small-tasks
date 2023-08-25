<?php

class Product
{
    private string $name;
    private int $price;
    private int $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getCost (): int
    {
        return $this->price * $this->quantity;
    }
}

class Cart
{
    private array $products;

    public function getProducts(): array
    {
        return $this->products;
    }

    public function addProduct ($newProduct): void {
        $this->products[] = $newProduct;
    }

    public function removeProduct(string $productToRemove):void {
        foreach ($this->products as $product) {
            if($product->getName() == $productToRemove) {
                unset($this->products[(array_search($product, $this->products))]);
                $this->products = array_values($this->products);
                break;
            }
        }
        //BAD SOLUTION??? WORKING ^^^^^

        /*if(array_search(getName($productToRemove), $this->products)) {
            unset($this->products[array_search($productToRemove, $this->products)]);
        }*/
        // WOULD BE BETTER SOLUTION??? NOT WORKING ^^^^^
    }

    public function getTotalCost (): int {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getCost();
        }
        return $sum;
    }

    public function getTotalQuantity (): int {
        $totalQuantity = 0;
        foreach ($this->products as $product) {
            $totalQuantity += $product->getQuantity();
        }
        return $totalQuantity;
    }

    public function getAvgPrice (): float {
        return $this->getTotalCost() / $this->getTotalQuantity();
    }
}

$cart = new Cart();

$cart->addProduct(new Product('apple', 10, 3));
$cart->addProduct(new Product('pear', 25, 1));
$cart->addProduct(new Product('grape', 15, 5));

echo $cart->getTotalCost();
echo PHP_EOL;
echo $cart->getTotalQuantity();
echo PHP_EOL;
echo $cart->getAvgPrice();
