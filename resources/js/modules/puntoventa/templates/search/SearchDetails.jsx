import React,{ useState} from "react";
import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';
export default function SalesDetails() {

    const [clientShow,setClientShow] = useState(null)
    return (
    <>
        <div className="container-fluid">
            <div className="row justify-content-center">
                <div className="col-md-12">
                    <div className="card card-outline shadow">
              
                        <div className="card-body">
                            <div className="row justify-content-center">
                                <div className="col-md-12">
                                 
                                    <div className="text-center">
                                        <h5>El usuario no existe.</h5>
                                  
                                    </div>
                                    <br></br>
                                        <div className="row justify-content-center">
                                            <div className="col-md-">
                                    <Button variant="secondary" onClick={() => setClientShow(true)}>
                                        Registrar
                                    </Button>

                                    <Modal show={clientShow} onHide={() => setClientShow(false)}>
                                        <Modal.Header>
                                        <Modal.Title>Agregar cliente</Modal.Title>
                                        <Button variant="close" type="button" data-dismiss="modal" aria-label="Close" onClick={() => setSearchProductsShow(false)}>
                                            <span aria-hidden="true">×</span>
                                        </Button>

                                        </Modal.Header>
                                        <Modal.Body>
                                    
                                        </Modal.Body>
                                        <Modal.Footer>
                                        <Button variant="secondary" onClick={() => setClientShow(false)}>
                                            Close
                                        </Button>
                                        </Modal.Footer>
                                    </Modal>
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
