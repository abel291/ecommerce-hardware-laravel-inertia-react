import { Link, usePage } from "@inertiajs/react"
import Suscribe from "./Suscribe"
import ApplicationLogo from "@/Components/ApplicationLogo"
import SocilaMediaIcon from "./SocilaMediaIcon";

const Footer = () => {
    const { settings } = usePage().props;
    return (
        <>
            <div className="container py-content">
                <Suscribe />
            </div>

            <footer className="  ">
                <div className="bg-primary-600 text-white ">
                    <div className="container  ">
                        <div className="py-8 md:py-10 lg:py-12 xl:py-14 grid grid-cols-2 lg:grid-cols-5 gap-8">
                            <div className="col-span-2 ">
                                <div className="flex-shrink-0 flex items-center text-primary-600">

                                    <ApplicationLogo bgIcon="bg-white" colorIcon="text-primary-600" textColor="text-white" />

                                </div>
                                <p className=" leading-6 mt-2 lg:mt-5">
                                    {settings.company.entry}
                                </p>
                            </div>
                            <ItemFooter title={"Contacto"}>
                                <div className="space-y-2  ">
                                    <div>{settings.company.email}</div>
                                    <div>{settings.company.address}</div>
                                    <div>{settings.company.phone}</div>
                                </div>
                            </ItemFooter>
                            <ItemFooter title={"Porque elegirnos"}>
                                <div className="space-y-1 ">
                                    <Link href="/shipping-delivery" className="block">
                                        Envío y Entrega
                                    </Link>
                                    <Link href="/return-exchanges" className="block">
                                        Devoluciones y cambios
                                    </Link>

                                    <Link href="/faq" className="block">
                                        Preguntas frecuentes y ayudas
                                    </Link>
                                </div>
                            </ItemFooter>
                            <ItemFooter title={"Top Categorias"}>
                                <div className="space-y-1  ">
                                    <Link href={route('search', { 'categories[]': "teclados" })} className="block">
                                        Teclados
                                    </Link>
                                    <Link href={route('search', { 'categories[]': "mouses" })} className="block">
                                        Mouses
                                    </Link>
                                    <Link href={route('search', { 'categories[]': "procesadores" })} className="block">
                                        Procesadores
                                    </Link>
                                    <Link href={route('search', { 'categories[]': "ram" })} className="block">
                                        Ram
                                    </Link>
                                    {/* <Link href={route('search', { 'categories[]': "almacenamiento" })} className="block">
									Ssd
								</Link> */}
                                </div>
                            </ItemFooter>
                        </div>

                        <div className="border-t border-white/10 py-5" >
                            <div className="flex items-center justify-between ">
                                <p>
                                    © 2024 {settings.company.name}. All rights reserved.
                                </p>
                                <SocilaMediaIcon />
                            </div>
                        </div>
                    </div>

                </div>


            </footer>
        </>
    )
}
const ItemFooter = ({ title, children }) => {
    return (
        <div>
            <h4 className='mt-2 font-bold text-xl'>{title}</h4>
            <div className='mt-2 lg:mt-5'>
                {children}
            </div>
        </div>
    )
}

export default Footer
