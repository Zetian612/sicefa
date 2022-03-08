import React, {useState, useEffect} from 'react'
import ProductsInvoice from '../templates/invoice/ProductsInvoice'

export default function Products(props) {

    const { productos, setProductos } = props;

    const [currentProductos, setCurrentProdcutos] = useState(null);

    // Hidratación de afuera hacia adentro
    // Sirve para actualizar el estado interno, cuándo las entradas externas cambien
    useEffect(() => {
        if (productos !== null && productos !== undefined) {
            setCurrentProdcutos(productos);
        }
    }, [productos]);

    // Hidratación hacia afuera
    // Sirve para acualizar la salida cuándo el estado interno cambia
    useEffect(() => {
        if (currentProductos !== null) {
            if (setProductos) {
                setProductos(currentProductos);
            }
        }
    }, [currentProductos]);

    return (
        <ProductsInvoice
        currentProductos={currentProductos}
        setCurrentProdcutos={setCurrentProdcutos}
        // handleSubmit={handleSubmit}
        />
    )
}
