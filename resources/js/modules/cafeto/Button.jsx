import React from "react";

export default function Button(props) {
    return (
        <>
            <button
                className={props.className}
                type={props.type}
                data-toggle={props.datatoggle}
                data-target={props.datatarget}
            >
                {props.title}
            </button>
        </>
    );
}
