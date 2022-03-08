import React, { useState, useEffect } from "react";
import moment from "moment";

import ProductsInvoice from "./ProductsInvoice";
import ProductsModal from "./ProductsModal";

const dbProductos = {
    123: {
        nombre: "Cafe Americano",
        precio: 12.5,
    },
    456: {
        nombre: "Cafe Campesino",
        precio: 8.5,
    },
};
export default function ShowInvoice(props) {
    // Estados internos
    const [currentListaProductos, setCurrentListaProductos] = useState(null);

    return (
        <>
            <div className="invoice p-3 mb-3">
                {/* title row */}
                <div className="row">
                    <div className="col-12">
                        <h4>
                            <i className="fas fa-globe" /> Punto de Cafe
                            <small className="float-right">
                                Date: {moment().format("L")}
                            </small>
                        </h4>
                    </div>
                    {/* /.col */}
                </div>
                {/* info row */}

                <div className="row invoice-info">
                    <div className="col-sm-4 invoice-col">
                        <address>
                            <strong>CENTRO DE FORMACIÓN AGROINDUSTRIAL.</strong>
                            <br />
                            Nit. 899.99934-1
                            <br />
                            Producción de Centro - SENA Empresa La Angostura
                            <br />
                            Art 17 Decreto 1001 de 1997
                            <br />
                            Email: info@almasaeedstudio.com
                        </address>
                    </div>
                    {/* /.col */}
                    <div className="col-sm-4 invoice-col">
                        <address>
                            <strong>Cliente</strong>
                            <br /> Nombre:
                            {props.data.first_name +
                                " " +
                                props.data.first_last_name +
                                " " +
                                props.data.second_last_name}
                            <br />
                            Documento: {props.data.document}
                            <br />
                            Phone: (555) 539-1037
                            <br />
                            Email: john.doe@example.com
                        </address>
                    </div>
                    {/* /.col */}
                    <div className="col-sm-4 invoice-col">
                        <b>Factura N° 007612</b>
                        <br />
                        <br />
                        <b>Order ID:</b> 4F3S8J
                        <br />
                        <b>Payment Due:</b> 2/22/2014
                        <br />
                        <b>Account:</b> 968-34567
                    </div>
                    {/* /.col */}
                </div>
                {/* /.row */}
                {/* Table row */}
                <div className="row">
                    <ProductsModal
                        onText={(codigo) => {
                            const producto = dbProductos[codigo];

                            if (!producto) {
                                alert("El producto no existe :(");
                                return;
                            }

                            setCurrentListaProductos([
                                ...(currentListaProductos || []),
                                producto,
                            ]);
                        }}
                    />

                    <ProductsInvoice
                        productos={currentListaProductos}
                        setProductos={setCurrentListaProductos}
                    />

                    {/* /.col */}
                </div>
                {/* /.row */}

                {/* this row will not appear when printing */}
                <div className="row no-print">
                    <div className="col-12">
                        <a
                            href="invoice-print.html"
                            rel="noopener"
                            target="_blank"
                            className="btn btn-default"
                        >
                            <i className="fas fa-print" /> Print
                        </a>
                        <button
                            type="button"
                            className="btn btn-success float-right"
                        >
                            <i className="far fa-credit-card" /> Submit Payment
                        </button>
                        <button
                            type="button"
                            className="btn btn-primary float-right"
                            style={{ marginRight: 5 }}
                        >
                            <i className="fas fa-download" /> Generate PDF
                        </button>
                    </div>
                </div>
            </div>
            {/* /.invoice */}
            {/* /.col */}
            {/* /.row */}
            {/* /.container-fluid */}
        </>
    );
}
