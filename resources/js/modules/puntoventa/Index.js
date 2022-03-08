import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Search from './components/Search';
import Invoice from './components/Invoice';
import Alerts from './Alerts';

export class Index extends Component {
    constructor(props) {
        super(props);
        this.state = {
            value: "",
            client: [],
            // showDetails: false,
            //   showForm: true,
            isLoading: false,
            //   modal: false,
            //   showInvoice: false,
            errorMsg: ''
        };

        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
        // this.showInvoiceButton = this.showInvoiceButton.bind(this);
    }

    /* 
      Atrapo el valor del input.
    */
    handleChange(event) {
        this.setState({ value: event.target.value });
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
            this.setState({ isLoading: false});
        }
    }
    
    render() {
        const { client, isLoading, errorMsg} = this.state;
        return (<>
        <Alerts AlertMS={errorMsg} />
            <div className="container-fluid">
                <div className="row">
                    <Search
                        handleSubmit={this.handleSubmit}
                        value={this.state.value}
                        handleChange={this.handleChange}
                        isLoading={isLoading}
                        errorMsg={errorMsg}
                        data={client}
                    />

                    <Invoice
                        data={client} />
                </div>
            </div>

        </>
        )
    }
}

if (document.getElementById('pntoventasales')) {
    ReactDOM.render(<Index />, document.getElementById('pntoventasales'));
}
