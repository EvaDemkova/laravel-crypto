import React, { useState, useEffect } from 'react';

const Register = () => {
    return (
        <form action="/register" method="post" className="register-form">
           <div className="form-group">
                <label htmlFor="name">Name:</label>
                <input type="text" name="name" /> 
           </div>
            <div className="form-group">
                <label htmlFor="email">Email:</label>
                <input type="text" name="email" />
            </div>
            <div className="form-group">
                <label htmlFor="password">Password:</label>
                <input type="text" name="password" />
            </div>
            <div className="form-group">
                <label htmlFor="password_confirmation">Confirm password:</label>
                <input type="text" name="password_confirmation"/>
            </div>
        </form>
    )
}

export default Register;