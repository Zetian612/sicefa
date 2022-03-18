import React from "react";

export default function SalesDetails(props) {
    return (
        <>
            <div className="container-fluid">
                <div className="row justify-content-center">
                    <div className="col-md-12">
                        <div className="card card-outline shadow">
                            {/* <div className="card-header">
                    <h3 className="card-title">Sales</h3>
                </div> */}

                            <div className="card-body">
                                <div className="row justify-content-center">
                                    <div className="col-md-12">
                                        {/* {props.data.map(data => <div>{data.document}</div>)} */}
                                        <div className="text-center">
                                            <h5>El usuario no existe.</h5>
                                            {/* <p>{props.data.document}</p> */}
                                        </div>
                                        <br></br>
                                        <div className="row justify-content-center">
                                            <div className="col-md-">
                                               {props.AddClientButton}
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
