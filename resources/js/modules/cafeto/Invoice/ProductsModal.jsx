import React, { useState } from "react";
import Modal from "../Modal";
import Button from "../Button";

export default function ProductsModal(props) {

    const { onText } = props;

    const [currentText] = useState(null);

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
                modalTitle={"Modal"}
                modalId={"modal-product"}
                button={false}
                content={
                    <table className="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th>+</th>
                            </tr>
                        </thead>
                        <tbody>
                            {currentProductos.map((producto) => (
                                <React.Fragment key={producto.id}>
                                <tr>
                                    <td>1</td>
                                    <td>{producto.name}</td>
                                    <td>
                                        <button
                                            type="button"
                                            onClick={() => {
                                                // Marcamos la salida, llamando a la función que recibe nuestra salida
                                                if (onText) {
                                                  onText(currentText);
                                                }
                                              }}
                                            className="btn btn-primary"
                                        >
                                            Add
                                        </button>
                                    </td>
                                </tr>
                                </React.Fragment>
                            ))}
                        </tbody>
                    </table>
                }
            />
        </>
    );
}
