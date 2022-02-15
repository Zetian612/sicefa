import React from "react";
import Modal from "../Modal";
import Button from "../Button";



export default function ProductsInvoive() {

    function addProductsTable(params) {
        
    }

    function removeProductsTable(params) {

    }

    function getProducts(params){

    }


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
                            <tr>
                                <td>1</td>
                                <td>Cafe Americano</td>
                                <td><button type="button" onClick={addProductsTable()} className="btn btn-primary">Add</button></td>
                            </tr>
                        </tbody>
                    </table>
                }
            />
            <table className="table table-striped">
                <thead>
                    <tr>
                        <th>Qty</th>
                        <th>Product</th>
                        <th>Serial #</th>
                        <th>Description</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Call of Duty</td>
                        <td>455-981-221</td>
                        <td>
                            El snort testosterone trophy driving gloves handsome
                        </td>
                        <td>$64.50</td>
                    </tr>
                </tbody>
            </table>
        </>
    );
}
