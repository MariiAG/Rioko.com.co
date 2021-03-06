import React from 'react';
import './Login.css';

const LoginPage = () => {
    return(
        <div className="container">
            <p className="login">Hola BBy</p>
            <a className="waves-effect waves-light btn">button</a>
            <div class="row">
            <form class="col s12">
            <div class="row">
                <div className="input-field col s6">
                <i className="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" className="validate" />
                <label for="icon_prefix">First Name</label>
                </div>
                <div className="input-field col s6">
                <i className="material-icons prefix">phone</i>
                <input id="icon_telephone" type="tel" className="validate" />
                <label for="icon_telephone">Telephone</label>
                </div>
            </div>
            </form>
        </div>
        </div>
    );
}

export default LoginPage;