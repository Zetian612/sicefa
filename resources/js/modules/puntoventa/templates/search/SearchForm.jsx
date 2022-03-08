import React from "react";
// import I18n from '../../../vendor/I18n';


export default function SearchForm(props) {
    // window.I18n = I18n;
    // let translator = new I18n;
    return (
        <>
            
                        <div className="card card-cafeto card-outline shadow">
                            <div className="card-header text-muted border-bottom-0">
                          {/* {  translator.trans('cafeto::menu.Sales') } */}
                            </div>
                            <div className="card-body pt-0">
                                <div className="row justify-content-center">
                                    <div className="col-md-8">
                                        <form
                                            method="POST"
                                            acceptCharset="UTF-8"
                                            onSubmit={props.handleSubmit}
                                        >
                                            <input
                                                type="hidden"
                                                name="_token"
                                                defaultValue="DyRd0muSjN3MGHBFxcLoN21zv7HZsub9iQPjkvse"
                                            />
                                            <input
                                                value={props.value}
                                                onChange={props.handleChange}
                                                type="number"
                                                className="form-control"
                                                placeholder="Ingrese el documento."
                                                required
                                                name="search"
                                            />
                                            {/* <span 
                                    style={{color: "red"}}>
                                        {this.state.error["search"]}
                                    </span> */}
                                            <br />
                                            <div className="row justify-content-center">
                                                <div className="col-md-3">
                                                    <input
                                                        className="btn  btn-outline-primary"
                                                        type="submit"
                                                        defaultValue="Buscar"
                                                    />
                                                </div>
                                            </div>
                                            <br />
                                            <span className="text-center">
                                                {props.isLoading && (
                                                    <>
                                                        <p className="loading">
                                                            Loading...
                                                        </p>
                                                    </>
                                                )}
                                            </span>
                                            
                                            <span style={{ color: "red" }}>
                                                {props.errorMsg && (
                                                    <p className="errorMsg">
                                                        {props.errorMsg}
                                                    </p>
                                                )}
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/* </div>
                </div>
            </div> */}
        </>
    );
}
