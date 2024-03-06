import React from 'react'

function SimpleCard({ name, img }) {
    return (
        <div className="flex flex-col items-center">
            <div className="w-52 max-w-full h-48 first-line:w-52 px-4 py-5 rounded-lg bg-gray-100 flex items-center justify-center">
                <img src={img} className="max-w-full max-h-full " alt={name} />
            </div>

            <span className="font-semibold mt-4 text-sm md:text-base ">{name}</span>
        </div>
    )
}

export default SimpleCard
