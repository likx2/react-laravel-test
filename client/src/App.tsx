import React, {Component, useEffect, useState} from 'react';
import axios from "axios";
import Form from "./components/Form/Form";
import Main from './components/Main'

class App extends Component<any, any> {
    render() {
        return (
            <Main>
                <Form/>
            </Main>)
    }
}

export default App;
