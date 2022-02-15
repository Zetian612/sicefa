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
      <div className="flex-grow-1 d-flex flex-column justify-content-center align-items-center">
        <span className="text-secondary">
          <small>
            <em>No hay productos todavía</em>
          </small>
        </span>
      </div>
    );
  }

      {/* <span
        className="px-2 text-danger"
        style={{
          cursor: "pointer"
        }}
        onClick={() => {
          setCurrentProdcutos([
            ...currentProductos.slice(0, index),
            ...currentProductos.slice(index + 1)
          ]);
        }}
      >
        <i className="fas fa-trash" />
      </span> */}


    return (
        <>
            <table className="table table-striped">
                <thead>
                    <tr>
                        <th>Qty</th>
                        <th>Product</th>
                        <th>Serial #</th>
                        <th>Description</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                {currentProductos.map((producto, index) => (
                    <tr>
                        <td>{index}</td>
                        <td>{producto.name}</td>
                        <td>{producto.precio}</td>
                        <td>
                            El snort testosterone trophy driving gloves handsome
                        </td>
                        <td>$64.50</td>
                    </tr>
                    ))}
                </tbody>
            </table>
        </>
    );
}

