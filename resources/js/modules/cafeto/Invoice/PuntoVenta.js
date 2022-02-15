import React, { useState, useEffect } from "react";

import CodigoBarras from "./CodigoBarras";
import ListaProductos from "./ListaProductos";

// useState
// useEffect

const dbProductos = {
  "123": {
    nombre: "Coca Cola",
    precio: 12.5
  },
  "456": {
    nombre: "Galletas Marías",
    precio: 8.5
  }
};

export default props => {
  // Recepción de entradas
  // const { listaProductos, setListaProductos } = props;

  // Estados internos
  const [currentListaProductos, setCurrentListaProductos] = useState(null);

  // // Proceso de hidratación
  // // 1. Actualizar el estado interno cuándo cambia la entrada
  // useEffect(() => {
  //   if (listaProductos !== null && listaProductos !== undefined) {
  //     setCurrentListaProductos(listaProductos);
  //   }
  // }, [listaProductos]);
  // // 2. Actualizar la salida cuándo cambia el estado interno
  // useEffect(() => {
  //   if (currentListaProductos !== null && currentListaProductos !== undefined) {
  //     if (setListaProductos) {
  //       setListaProductos(currentListaProductos);
  //     }
  //   }
  // }, [currentListaProductos]);

  return (
    <div className="d-flex flex-column vh-100">
      <div className="border m-2">
        <h1>Mi Empresa - Punto De Venta</h1>
      </div>
      <div className="flex-grow-1 d-flex flex-column border m-2">
        <div className="flex-grow-1 d-flex border m-2">
          <div className="flex-grow-1 d-flex flex-column border m-2">
            <div className="flex-grow-1 d-flex flex-column pt-2">
              <ListaProductos
                productos={currentListaProductos}
                setProductos={setCurrentListaProductos}
              />
            </div>
            <div className="border-top">INFO PRODUCTOS</div>
          </div>
          <div className="flex-grow-1 d-flex flex-column border m-2">
            <div className="flex-grow-1 border m-2" />
            <div className="flex-grow-1 border m-2" />
          </div>
        </div>
        <div className="border m-2">
          <CodigoBarras
            onText={codigo => {
              const producto = dbProductos[codigo];

              if (!producto) {
                alert("El producto no existe :(");
                return;
              }

              setCurrentListaProductos([...(currentListaProductos || []), producto ]);
            }}
          />
        </div>
      </div>
    </div>
  );
};
