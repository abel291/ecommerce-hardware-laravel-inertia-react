<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductInSession
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
	 */
	public function handle(Request $request, Closure $next): Response
	{

		if (session()->missing('cart_products') || session()->missing('order')) {
			return to_route('home')->with(['error' => 'No hay productos en el checkout']);
		}
		return $next($request);
	}
}
