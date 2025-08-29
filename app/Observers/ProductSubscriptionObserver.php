<?php

namespace App\Observers;

use App\Models\ProductSubscription;

class ProductSubscriptionObserver
{
    public function creating(ProductSubscription $subscription)
    {
        $subscription->booking_trx_id=$subscription->booking_trx_id ?? $this->generateUniqueTrxId();
    }

    private function generateUniqueTrxId():string
    {
        $prefix = 'SEABWA';
        do{
            $randomString= $prefix . mt_rand(1000,9999);
        }while (ProductSubscription::where('booking_trx_id',$randomString)->exists());
        return $randomString;
    }
    /**
     * Handle the ProductSubscription "created" event.
     *
     * @param  \App\Models\ProductSubscription  $productSubscription
     * @return void
     */
    public function created(ProductSubscription $productSubscription)
    {
        //
    }

    /**
     * Handle the ProductSubscription "updated" event.
     *
     * @param  \App\Models\ProductSubscription  $productSubscription
     * @return void
     */
    public function updated(ProductSubscription $productSubscription)
    {
        //
    }

    /**
     * Handle the ProductSubscription "deleted" event.
     *
     * @param  \App\Models\ProductSubscription  $productSubscription
     * @return void
     */
    public function deleted(ProductSubscription $productSubscription)
    {
        //
    }

    /**
     * Handle the ProductSubscription "restored" event.
     *
     * @param  \App\Models\ProductSubscription  $productSubscription
     * @return void
     */
    public function restored(ProductSubscription $productSubscription)
    {
        //
    }

    /**
     * Handle the ProductSubscription "force deleted" event.
     *
     * @param  \App\Models\ProductSubscription  $productSubscription
     * @return void
     */
    public function forceDeleted(ProductSubscription $productSubscription)
    {
        //
    }
}
