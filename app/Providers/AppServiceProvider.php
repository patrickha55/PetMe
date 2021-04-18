<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::directive('currency', function ($value) {
            return "<?php echo number_format($value, 0, ',', '.'); ?>";
        });

        view()->composer(['layouts.client.app', 'layouts.client.appWithoutCategory'], function(){
            /*
            * Kiem tra user hien dang co cart nao trong trang thai active (1),
            * neu co thi lay thong tin cart ve va them vao session 
            */
            
            if(auth()->check()){

                $cart = \App\Cart::where([
                    'user_id' => auth()->id(),
                    'status' => 1
                ])->first();

                if(isset($cart)){ 

                    // Lay tat ca cart items trong $cart

                    $cartItems = \App\CartDetail::where([
                        'cart_id' => $cart->id,
                        'status' => 1
                    ])->get();
                    
                    // Tao cart moi trong session
            
                    \Cart::session(auth()->id())->clear();

                    foreach($cartItems as $item){
                        
                        $product = \App\Product::find($item->product_id);
                    
                        /*  Tao item moi trong cart tren session */      

                        \Cart::session(auth()->user()->id)->add(array(
                            'id' => $product->id,
                            'name' => $product->name,
                            'price' => $product->price,
                            'quantity' => $item->quantity,
                            'attributes' => array(),
                            'associatedModel' => $product,
                        )); 
                    }
                }
            } 
        });
    }
}
