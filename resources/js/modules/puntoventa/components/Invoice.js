import React, { useState, useEffect } from 'react';
import ShowInvoice from '../templates/invoice/ShowInvoice';
import Products from './Products';
import AddProducts from './AddProducts';

const dbProductos = {
  "123": {
    nombre: "Cafe Americano",
    precio: 2000
  },
  "456": {
    nombre: "Cafe Campesino",
    precio: 2000
  }
};

export default function Invoice(props) {
  // Estados internos
  const [currentListaProductos, setCurrentListaProductos] = useState(null);
  const { data } = props;
  return (
    <div className="col-md-7">
      <ShowInvoice
        title={'Punto de venta'}
        icon={"fas fa-shopping-cart"}
        route={"/puntoventa/admin/sales/invoice"}
        AddProducts={
          !data || data.length === 0 ?  "" : <AddProducts
            onText={codigo => {
              const producto = dbProductos[codigo];

              if (!producto) {
                alert("El producto no existe :(");
                return;
              }

              setCurrentListaProductos([...(currentListaProductos || []), producto]);
            }} /> 
        }
        products={
          <Products
            productos={currentListaProductos}
            setProductos={setCurrentListaProductos}

          />

        }
        data={data}
      />
    </div>
  )
}
