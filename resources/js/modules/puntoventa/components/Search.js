import React from 'react'
import SearchForm from '../templates/search/SearchForm'
import SearchDetails from '../templates/search/SearchDetails'
// import Modal from '../templates/Modal'
// import Button from '../templates/Button'

export default function Search(props) {

    const { handleSubmit, value, handleChange, isLoading, errorMsg, data } = props;

    return (

        <div className="col-md-4">
            <SearchForm
                handleSubmit={handleSubmit}
                value={value}
                handleChange={handleChange}
                isLoading={isLoading}
                errorMsg={errorMsg}
            />

            { data === "" ?

            <>
                <SearchDetails
                   />
            </>

                : ""} 
        </div>

    )
}