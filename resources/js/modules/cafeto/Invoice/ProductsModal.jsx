import React, { useState } from "react";
import Modal from "../Modal";
import Button from "../Button";

export default function ProductsModal(props) {



   
    const { onText } = props;

    const [currentText, setCurrentText] = useState(null);
  

    // const productos = [{"id": 1, "name": "Cafe"}];

    return (
        <>
            <Button
                className={"btn btn-secondary"}
                type={"button"}
                datatarget={"#modal-product"}
                datatoggle={"modal"}
                title={"+"}
            />
            <Modal
                modalTitle={"Buscar Producto"}
                modalId={"modal-product"}
                button={false}
                content={
                    

                 
                      <div className="input-group">
                        <input
                          value={currentText || ""}
                          className="form-control"
                          placeholder="Ingrese el nombre del producto."
                          onChange={event => setCurrentText(event.target.value)}
                          onKeyDown={event => {
                            if (event.key === "Enter") {
                              // Marcamos la salida, llamando a la función que recibe nuestra salida
                              if (onText) {
                                onText(currentText);
                              }
                            }
                          }}
                        />
                        <div className="input-group-append">
                          <button
                            className="btn btn-primary"
                            onClick={() => {
                              // Marcamos la salida, llamando a la función que recibe nuestra salida
                              if (onText) {
                                onText(currentText);
                              }
                            }}
                          >
                            <i className="fas fa-barcode" />
                          </button>
                        </div>
                      </div>
                    // <table className="table table-bordered table-striped">
                    //     <thead>
                    //         <tr>
                    //             <th>ID</th>
                    //             <th>Producto</th>
                    //             <th>+</th>
                    //         </tr>
                    //     </thead>
                    //     <tbody>
                    //         {props.onText.map((producto,index) => (
                    //             <React.Fragment key={producto.index}>
                    //             <tr>
                    //                 <td>1</td>
                    //                 <td>{producto.name}</td>
                    //                 <td>
                    //                     <button
                    //                         type="button"
                    //                         // onClick={() => {
                    //                         //     // Marcamos la salida, llamando a la función que recibe nuestra salida
                    //                         //     if (onText) {
                    //                         //       onText(index);
                    //                         //     }
                    //                         //   }}
                                             
                    //                         className="btn btn-primary"
                    //                     >
                    //                         Add
                    //                     </button>
                    //                 </td>
                    //             </tr>
                    //             </React.Fragment>
                    //         ))}
                    //     </tbody>
                    // </table>
                }
            />
        </>
    );
}
