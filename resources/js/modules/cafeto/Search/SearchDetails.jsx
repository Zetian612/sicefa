import React from "react";

export default function SalesDetails(props) {
    return (
        <>
            <div className="container-fluid">
                <div className="row justify-content-center">
                    <div className="col-md-6">
                        <div className="card card-outline shadow">
                            {/* <div className="card-header">
                    <h3 className="card-title">Sales</h3>
                </div> */}

                            <div className="card-body">
                                <div className="row justify-content-center">
                                    <div className="col-md-8">
                                        {/* {props.data.map(data => <div>{data.document}</div>)} */}
                                        <div className="text-center">
                                            <h5>
                                                {props.data === ""
                                                    ? "El usuario no existe."
                                                    : props.data.first_name +
                                                      " " +
                                                      props.data
                                                          .first_last_name +
                                                      " " +
                                                      props.data
                                                          .second_last_name}
                                            </h5>
                                            {/* <p>{props.data.document}</p> */}
                                        </div>
                                        <br></br>
                                        <div className="row justify-content-center">
                                            <div className="col-md-3">
                                                {props.data === "" ? (
                                                    <button
                                                        className="btn btn-secondary"
                                                        type="button"
                                                        data-toggle="modal"
                                                        data-target="#modal-default"
                                                    >
                                                        Registrar
                                                    </button>
                                                ) : (
                                                    <button
                                                        className="btn btn-primary"
                                                        type="submit"
                                                        defaultValue="Confirmar"
                                                        onClick={
                                                            props.showInvoiceButton
                                                        }
                                                    >
                                                        Confirmar
                                                    </button>
                                                )}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
