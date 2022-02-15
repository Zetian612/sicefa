import React from "react";

export default function Modal(props) {
    return (
        <>
            {/* Modal agregar producto */}

            <div className="modal fade" id={props.modalId}>
                <div className="modal-dialog">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h4 className="modal-title">{props.modalTitle}</h4>
                            <button
                                type="button"
                                className="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div className="modal-body">{props.content}</div>
                        <div className="modal-footer justify-content-between">
                            <button
                                type="button"
                                className="btn btn-default"
                                data-dismiss="modal"
                            >
                                Close
                            </button>
                            {props.button && (
                                <button
                                    type="button"
                                    className="btn btn-primary"
                                >
                                    Register
                                </button>
                            )}
                        </div>
                    </div>
                    {/* /.modal-content */}
                </div>
                {/* /.modal-dialog */}
            </div>
            {/* /.modal */}
        </>
    );
}
