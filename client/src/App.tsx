import React, {Component} from 'react';
import Form from './components/Form';
import Main from './components/Main'
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";
import PostList from "./components/PostList";

class App extends Component<any, any> {
    render() {
        return (
            <Router>
                <Switch>
                    <Main>
                        <Route exact path={'/'} component={Form}/>
                        <Route path={'/posts/getByAuthor/:authorId'} component={PostList}/>
                        <Route path={'/posts/update/:id'} component={Form}/>
                    </Main>
                </Switch>

            </Router>)
    }
}

export default App;
