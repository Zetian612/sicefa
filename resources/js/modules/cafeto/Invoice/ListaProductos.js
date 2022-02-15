import React, { useState, useEffect } from "react";

export default props => {
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

  return currentProductos.map((producto, index) => (
    <div
      key={`producto-${index}`}
      className="d-flex justify-content-between mb-2 px-2 pb-2 border-bottom"
    >
      <span className="flex-grow-1">{producto.nombre}</span>
      <span className="flex-grow-1 text-right">{producto.precio}</span>
      <span
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
      </span>
    </div>
  ));
};
