import { MagnifyingGlassIcon, ShoppingBagIcon, ShoppingCartIcon } from '@heroicons/react/24/solid'
import React from 'react'

import { Link } from '@inertiajs/react';

import ProfileDropdown from './ProfileDropdown';
import CategoriesDropdown from './CategoriesDropdown';
import ApplicationLogo from '@/Components/ApplicationLogo';

export default function Navbar({ auth }) {

	const links = [
		{
			title: 'Ofetas',
			path: 'offers'
		},
		{
			title: 'Combos',
			path: 'combos'
		},
		{
			title: 'Ensambles',
			path: 'assemblies'
		},
		{
			title: 'Targeta de regalo',
			path: 'gift-card'
		},
		{
			title: 'Blog',
			path: 'blog'
		},
		{
			title: 'Contactenos',
			path: 'contact'
		},
	]
	return (
		<nav className="shadow pt-4 pb-4">
			<div className="container mx-auto ">
				<div className="flex gap-5 items-center ">
					<ApplicationLogo />
					<div className="w-full xl:w-3/5">
						<form action="" className="overflow-hidden border-2 border-orange-500 bg-orange-500 flex rounded-md shadow-sm">
							<input
								id="search-main"
								type="text"
								name="search"
								className=" block w-full border-none focus:border-none ring-0 focus:ring-none focus:ring-0  "
								autoComplete="search"


							/>
							<button type="submit" className="inline-flex items-center px-3  text-sm text-white ">
								<MagnifyingGlassIcon className="w-6 h-6" />
							</button>
						</form>
					</div>
				</div>
				<div className="flex mt-4 justify-between  relative text-sm">
					<div className="flex gap-x-6 items-center ">
						<CategoriesDropdown />
						{links.map((item) => (
							<Link key={item.path} href={route(item.path)} className={(route().current(item.path) ? 'border-b-2  border-orange-500 ' : '')}>
								{item.title}
							</Link>
						))}

					</div>
					<div className="flex gap-x-3 items-center ">
						{auth.user ? (
							<ProfileDropdown />
						) : (
							<>
								<Link href={route('login')} >Acceder</Link>
								<Link href={route('register')}>Crear cuenta</Link>
							</>
						)}

						<Link href={route('shopping-cart.index')}>
							<ShoppingBagIcon className="w-5 h-5  text-orange-500" />
						</Link>
					</div>
				</div>
			</div>
		</nav>
	)

}
