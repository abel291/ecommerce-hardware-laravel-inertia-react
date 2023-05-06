<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderProduct extends Model
{
	use HasFactory;
	/* Get the user that owns the PaidProduct
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */

	protected $guarded  = [];

	public function order(): BelongsTo
	{
		return $this->belongsTo(Order::class);
	}
	public function product(): BelongsTo
	{
		return $this->belongsTo(Product::class);
	}
}
