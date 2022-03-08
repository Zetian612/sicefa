import React, { useState, useEffect } from "react";

export default function ProductsInvoice(props) {
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

    if (!currentProductos || currentProductos.length === 0) {
        return (
            <>
                <table className="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Producto</th>
                            <th>Serial #</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7">
                                <div className="flex-grow-1 d-flex flex-column justify-content-center align-items-center">
                                    <span className="text-secondary">
                                        <em>No hay productos todavía</em>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </>
        );
    }

    return (
        <>
            <div className="col-12 table-responsive">
                <table className="table table-striped">
                    <thead>
                        <tr>
                            <th>Qty</th>
                            <th>Product</th>
                            <th>Serial #</th>
                            <th>Description</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        {currentProductos.map((producto, index) => (
                            <React.Fragment key={index}>
                                <tr>
                                    <td>{index}</td>
                                    <td>{producto.nombre}</td>
                                    <td>#023</td>
                                    <td>
                                        El snort testosterone trophy driving
                                        gloves handsome
                                    </td>
                                    <td></td>
                                    <td>{producto.precio}</td>
                                    <td>
                                        <span
                                            className="px-2 text-danger"
                                            style={{
                                                cursor: "pointer",
                                            }}
                                            onClick={() => {
                                                setCurrentProdcutos([
                                                    ...currentProductos.slice(
                                                        0,
                                                        index
                                                    ),
                                                    ...currentProductos.slice(
                                                        index + 1
                                                    ),
                                                ]);
                                            }}
                                        >
                                            <i className="fas fa-trash" />
                                        </span>
                                    </td>
                                </tr>
                            </React.Fragment>
                        ))}
                    </tbody>
                </table>

                <div className="row">
                    {/* accepted payments column */}
                    <div className="col-6">
                        {/*                           
                            <p
                                className="text-muted well well-sm shadow-none"
                                style={{ marginTop: 10 }}
                            >
                                Etsy doostang zoodles disqus groupon greplin
                                oooj voxy zoodles, weebly ning heekya handango
                                imeem plugg dopplr jibjab, movity jajah plickers
                                sifteo edmodo ifttt zimbra.
                            </p> */}
                    </div>
                    {/* /.col */}
                    <div className="col-6">
                        {/* <p className="lead">Amount Due 2/22/2014</p> */}
                        <div className="table-responsive">
                            <table className="table">
                                <tbody>
                                    <tr>
                                        <th>Total:</th>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {/* /.col */}
                </div>
                {/* /.row */}
            </div>
        </>
    );
}
