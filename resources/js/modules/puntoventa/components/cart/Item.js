import React from 'react';

class Item extends React.Component {
    constructor(props) {
        super(props);

        this.handleClick = this.handleClick.bind(this);
    }

    handleClick() {
        // event.preventDefault();

        this.props.addCartItem(this.props.item);
    }

    render() {
        return (
            <tr key={this.props.index}>
                <td scope="row">{this.props.item}</td>
                <td>{this.props.item}</td>
                <td> <Button variant="success" id={`btn_${this.props.index}`} onClick={this.handleClick}>
                    +
                </Button></td>
            </tr>
        );
    }
}

export default Item;