<?php


namespace App\classes;


class Product
{
    protected $products = [];
    protected $text;
    protected $result;
    protected $product;

    public function __construct($post = null)
    {
        if (isset($post['search']))
        {
            $this->text = $post['search'];
        }
    }
    public function getAllProduct()
    {
        return [
            0 => [
                'Id' => 1,
                'name' => 'T-shirt',
                'category' => 'Man Fashion',
                'brand' => 'Yellow',
                'price' => '3500',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis nisi sed leo vestibulum interdum. Duis eget arcu vitae tortor tempus vulputate vitae ac turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse commodo vitae est eget volutpat. Mauris mollis scelerisque orci id egestas. Pellentesque maximus augue vel pharetra dictum. Pellentesque id aliquet est, a mattis ipsum. Nulla non lectus sed tellus pretium suscipit id vel justo. Donec blandit porta arcu non feugiat. Proin facilisis magna tincidunt mollis sagittis. Ut gravida non metus non eleifend. Donec porttitor dignissim dolor, sit amet semper erat commodo vitae. In in tristique ligula.',
                'image' => 'p9.jpg'
            ],
            1 => [
                'Id' => 2,
                'name' => 'Sunglasses',
                'category' => 'Man Fashion',
                'brand' => 'Gucci',
                'price' => '39000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis nisi sed leo vestibulum interdum. Duis eget arcu vitae tortor tempus vulputate vitae ac turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse commodo vitae est eget volutpat. Mauris mollis scelerisque orci id egestas. Pellentesque maximus augue vel pharetra dictum. Pellentesque id aliquet est, a mattis ipsum. Nulla non lectus sed tellus pretium suscipit id vel justo. Donec blandit porta arcu non feugiat. Proin facilisis magna tincidunt mollis sagittis. Ut gravida non metus non eleifend. Donec porttitor dignissim dolor, sit amet semper erat commodo vitae. In in tristique ligula.',
                'image' => 'p4.jpg'
            ],
            2 => [
                'Id' => 3,
                'name' => 'Shirt',
                'category' => 'Man Fashion',
                'brand' => 'Illiyen',
                'price' => '3500',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis nisi sed leo vestibulum interdum. Duis eget arcu vitae tortor tempus vulputate vitae ac turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse commodo vitae est eget volutpat. Mauris mollis scelerisque orci id egestas. Pellentesque maximus augue vel pharetra dictum. Pellentesque id aliquet est, a mattis ipsum. Nulla non lectus sed tellus pretium suscipit id vel justo. Donec blandit porta arcu non feugiat. Proin facilisis magna tincidunt mollis sagittis. Ut gravida non metus non eleifend. Donec porttitor dignissim dolor, sit amet semper erat commodo vitae. In in tristique ligula.',
                'image' => 'p12.jpg'
            ],
            3 => [
                'Id' => 4,
                'name' => 'Shoes',
                'category' => 'Man Fashion',
                'brand' => 'Nike',
                'price' => '35000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis nisi sed leo vestibulum interdum. Duis eget arcu vitae tortor tempus vulputate vitae ac turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse commodo vitae est eget volutpat. Mauris mollis scelerisque orci id egestas. Pellentesque maximus augue vel pharetra dictum. Pellentesque id aliquet est, a mattis ipsum. Nulla non lectus sed tellus pretium suscipit id vel justo. Donec blandit porta arcu non feugiat. Proin facilisis magna tincidunt mollis sagittis. Ut gravida non metus non eleifend. Donec porttitor dignissim dolor, sit amet semper erat commodo vitae. In in tristique ligula.',
                'image' => 'p6.jpg'
            ],
            4 => [
                'Id' => 5,
                'name' => 'T-Shirt',
                'category' => 'Man Fashion',
                'brand' => 'Easy',
                'price' => '3000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis nisi sed leo vestibulum interdum. Duis eget arcu vitae tortor tempus vulputate vitae ac turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse commodo vitae est eget volutpat. Mauris mollis scelerisque orci id egestas. Pellentesque maximus augue vel pharetra dictum. Pellentesque id aliquet est, a mattis ipsum. Nulla non lectus sed tellus pretium suscipit id vel justo. Donec blandit porta arcu non feugiat. Proin facilisis magna tincidunt mollis sagittis. Ut gravida non metus non eleifend. Donec porttitor dignissim dolor, sit amet semper erat commodo vitae. In in tristique ligula.',
                'image' => 'p10.jpg'
            ],
            5 => [
                'Id' => 6,
                'name' => 'Bitcoin',
                'category' => 'Man Fashion',
                'brand' => 'BTC',
                'price' => '350000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis nisi sed leo vestibulum interdum. Duis eget arcu vitae tortor tempus vulputate vitae ac turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse commodo vitae est eget volutpat. Mauris mollis scelerisque orci id egestas. Pellentesque maximus augue vel pharetra dictum. Pellentesque id aliquet est, a mattis ipsum. Nulla non lectus sed tellus pretium suscipit id vel justo. Donec blandit porta arcu non feugiat. Proin facilisis magna tincidunt mollis sagittis. Ut gravida non metus non eleifend. Donec porttitor dignissim dolor, sit amet semper erat commodo vitae. In in tristique ligula.',
                'image' => 'bit1.jpg'
            ],

        ];
    }
    public function getProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['Id'] == $id)
            {
                return $product;
            }
        }
    }
    public function getAllProductBySearchText()
    {
        $this->product = $this->getAllProduct();
        foreach ($this->product as $productId)
        {
            if ($this->text == $productId['Id'])
            {
                $this->result = $productId;
                break;
            }
        }
        return $this->result;

    }
}