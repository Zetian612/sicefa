import React, { useState, useEffect } from 'react'
import Modal from 'react-bootstrap/Modal'
import Button from 'react-bootstrap/Button'

export default function SearchProducts(props) {
  const [SearchProductsShow, setSearchProductsShow] = useState(false);

  const { addCartItem} = props;

  // const [currentText, setCurrentText] = useState(null);
  const [products, setProducts] = useState([]);
  const [tablaproducts, setTablaProducts] = useState([]);
  const [busqueda, setBusqueda] = useState("");
  const [searchShow, setSearchShow] = useState(false);

  const handleChange = (e) => {
    setBusqueda(e.target.value);
    if(e.target.value === ""){
      setSearchShow(false);
    }
    else {
      setSearchShow(true);
    }
    filtrar(e.target.value);
  }

  const peticionGet = async () => {
    await axios.get("http://sicefa.test:8081/puntoventa/admin/sales/invoice/products")
      .then(response => {
        setProducts(response.data);
        setTablaProducts(response.data);
      }).catch(error => {
        console.log(error);
      })
  }

  const filtrar = (terminoBusqueda) => {
    var resultadosBusqueda = tablaproducts.filter((elemento) => {
      if (elemento.element.name.toString().toLowerCase().includes(terminoBusqueda.toLowerCase())
      ) {
        return elemento;
      }
    });
    setProducts(resultadosBusqueda);
  }

  useEffect(() => {
    peticionGet();
  }, [])

 const handleClick = (item) => {
		

		addCartItem(item);
	}


  return (
    <>

      <Button variant="secondary" onClick={() => setSearchProductsShow(true)}>
        +
      </Button>

      <Modal show={SearchProductsShow} onHide={() => setSearchProductsShow(false)}>
        <Modal.Header>
          <Modal.Title>Agregar productos</Modal.Title>
          <Button variant="close" type="button" data-dismiss="modal" aria-label="Close" onClick={() => setSearchProductsShow(false)}>
            <span aria-hidden="true">×</span>
          </Button>

        </Modal.Header>
        <Modal.Body>
          <div className="input-group">
            <input
              type="search"
              list="items-products"
              value={busqueda}
              className="form-control"
              placeholder="Ingrese el nombre del producto."
              onChange={handleChange}
            />
            <div className="input-group-append">
              <button
                className="btn btn-primary"
                // onClick={() => {
                //   // Marcamos la salida, llamando a la función que recibe nuestra salida
                //   if (onText) {
                //     onText(currentText);
                //   }
                // }}
              >
                <i className="fas fa-barcode" />
              </button>
            </div>
            <div className="container-fluid">
            <table className="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  </tr>
              </thead>
              <tbody>
                { searchShow && products.map((item,index) => (
                  <tr key={index}>
                    <td scope="row">{item.element.id}</td>
                    <td>{item.element.name}</td>
                    <td> <Button variant="success" id={`btn_${index}`}
                    onClick={
                      () =>{
                        handleClick(item);
                      } 
                    }
                    
                    >
                      +
                    </Button></td>
                  </tr>
                ))}
              </tbody>
            </table>
            </div>
          </div>
        </Modal.Body>
        <Modal.Footer>
          <Button variant="secondary" onClick={() => setSearchProductsShow(false)}>
            Close
          </Button>
        </Modal.Footer>
      </Modal>
    </>
  )
}
