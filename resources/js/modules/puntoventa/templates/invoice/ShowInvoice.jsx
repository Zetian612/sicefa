import React from "react";
import moment from "moment";

export default function ShowInvoice(props) {
    const {icon, title, route, data, AddProducts, products} = props;

    return (
        <>
            <div className="invoice p-3 mb-3">
                {/* title row */}
                <div className="row">
                    <div className="col-12">
                        <h4>
                            <i className={icon} /> {title}
                            <small className="float-right">
                                Date: {moment().format("L")}
                            </small>
                        </h4>
                    </div>
                    {/* /.col */}
                </div>
                {/* info row */}

                <div className="row invoice-info">
                    <div className="col-sm-5 invoice-col">
                        <address>
                            <strong>CENTRO DE FORMACIÓN AGROINDUSTRIAL.</strong>
                            <br />
                            Nit. 899.99934-1
                            <br />
                            Producción de Centro - SENA Empresa La Angostura
                            <br />
                            Art 17 Decreto 1001 de 1997
                            <br />
                            {/* Email: info@almasaeedstudio.com */}
                        </address>
                    </div>
                    {/* /.col */}
                    <div className="col-sm-4 invoice-col">
                        <address>
                            <strong>Cliente</strong>
                            <br /> Nombre:
                            { !data || data.length === 0 ? "" : data.first_name +
                                " " +
                                data.first_last_name +
                                " " +
                                data.second_last_name}
                            <br />
                            Documento: {!data || data.length === 0 ? "" : data.document}
                            <br />
                            Phone: (555) 539-1037
                            <br />
                            {/* Email: john.doe@example.com */}
                        </address>
                    </div>
                    {/* /.col */}
                    <div className="col-sm-3 invoice-col">
                        <b>Factura N° 007612</b>
                        <br />
                        <br />
                    </div>
                    {/* /.col */}
                </div>
                {/* /.row */}
                {/* Table row */}
                <div className="row">
                   {AddProducts}
                   <br />
                   
                    {products}
                </div>
                {/* /.row */}

                {/* this row will not appear when printing */}
                <div className="row no-print">
                    <div className="col-12">
                        <a
                            href={route}
                            // onClick={handleSubmitProduct}
                            className="btn btn-default"
                        >
                            <i className="fas fa-print" /> Print
                        </a>
                        {/* <button
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
                        </button> */}
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
