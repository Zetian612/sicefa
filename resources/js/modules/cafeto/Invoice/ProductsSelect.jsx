import React from "react";

export default function ProductsSelect() {
    return (
        <>
  
                <label>Multiple</label>
                <select
                    className="select2"
                    multiple="multiple"
                    data-placeholder="Select a State"
                    style={{ width: "100%" }}
                >
                    <option>Alabama</option>
                    <option>Alabama</option>
                    <option>Alabama</option>
                    <option>Alabama</option>
                </select>
         
        </>
    );
}
