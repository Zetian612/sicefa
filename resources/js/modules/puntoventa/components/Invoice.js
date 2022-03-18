import React, { useState } from 'react';
import ShowInvoice from '../templates/invoice/ShowInvoice';
import Products from './Products';
import SearchProducts from './SearchProducts';

const dbProductos = {
  "123": {
    nombre: "Cafe Americano",
    precio: 2000,
    cantidad: 5
  },
  "456": {
    nombre: "Cafe Campesino",
    precio: 2000,
    cantidad: 5
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
        SearchProducts={
          !data || data.length === 0 ?  "" : <SearchProducts
            onText={codigo => {
              const producto = dbProductos[codigo];

              if (!producto) {
                alert("El producto no existe :(");
                return;
              }

              setCurrentListaProductos([...(currentListaProductos || []), producto]);
            }} /> 
         
        }
        lisproduct={currentListaProductos}
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
