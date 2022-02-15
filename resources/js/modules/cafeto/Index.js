import React, { Component, Suspense, lazy } from 'react';
import ReactDOM from 'react-dom';
import SalesDetails from './Search/SearchDetails';
import SearchForm from './Search/SearchForm';
const Invoice = lazy(() => import('./Invoice/ShowInvoice'));
import Load from './Load';
import axios from 'axios';


export default class Index extends Component {
  constructor(props) {
    super(props);
    this.state = {
      value: "",
      client: [],
      showDetails: false,
      showForm: true,
      isLoading: false,
      modal: false,
      showInvoice: false,
      errorMsg: ''
    };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
    this.showInvoiceButton = this.showInvoiceButton.bind(this);
  }

  /* 
    Atrapo el valor del input.
  */
  handleChange(event) {
    this.setState({ value: event.target.value });
  }

  showInvoiceButton() {
    this.setState({ showInvoice: true, showDetails: false, showForm: false });
  }


  /* 
    Ese valor lo envio mediante la Url a la funcion en PHP que hara el llamado
    a la base de datos.
  */
  async handleSubmit(event) {
    event.preventDefault();
    try {

      this.setState({ isLoading: true });

      const response = await axios.get(
        `http://127.0.0.1:8000/cafeto/admin/sales/search/${this.state.value}`
      );

      this.setState({ client: response.data, errorMsg: '' });


    } catch (error) {
      this.setState({
        errorMsg: 'Error while loading data. Try again later.'
      });
    } finally {
      this.setState({ isLoading: false, showDetails: true });
    }
  }


  /* 
    declaro las constantes que necesitare para los datos y componentes.
  */
  render() {
    const { client, isLoading, errorMsg, showDetails, modal, showInvoice, showForm } = this.state;

    return (<div>

      {showForm && <SearchForm
        handleSubmit={this.handleSubmit}
        value={this.state.value}
        handleChange={this.handleChange}
        isLoading={isLoading}
        errorMsg={errorMsg}
        modal={modal}
      />}

     
      {showDetails && <SalesDetails data={client} showInvoiceButton={this.showInvoiceButton} />}
      
        <Suspense fallback={ <Load /> }>
         {showInvoice && <Invoice  data={client} />}
        </Suspense>
    
    </div>
    );
  }
}

if (document.getElementById('example')) {
  ReactDOM.render(<Index />, document.getElementById('example'));
}
