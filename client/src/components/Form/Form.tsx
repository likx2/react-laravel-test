import React, {ChangeEvent, Component, FormEvent} from 'react';
import {Button, TextField} from "@material-ui/core";
import axios from "axios";
import {withStyles} from "@material-ui/core/styles";
import {styles} from "./Form.style";


interface FormLocalState {
    title: string,
    content: string,
    author_id:number
}

const initialState: FormLocalState = {
    title: '',
    content: '',
    author_id:1
}

class Form extends Component<any, FormLocalState> {
    submitHandler: (e: FormEvent<HTMLFormElement>) => void
    onChangeHandler: (e: ChangeEvent<HTMLInputElement>) => void
    state = initialState

    constructor(props: any) {
        super(props)
        this.submitHandler = async (e: FormEvent<HTMLFormElement>) => {
            e.preventDefault()
            try {
                const response = await axios.post(`${process.env.REACT_APP_API_URL}/posts`, this.state)
                console.log(response.data)
            } catch (e) {
                throw e;
            } finally {
                this.setState(initialState)
            }
        }

        this.onChangeHandler = (e: ChangeEvent<HTMLInputElement>) => {
            this.setState({...this.state, [e.target.name]: e.target.value})
        }
    }

    render() {
        const {classes} = this.props
        return (
            <form onSubmit={this.submitHandler} className={classes.wrapper}>
                <TextField id="standard-basic" label="Title" name={'title'} onChange={this.onChangeHandler}
                           value={this.state.title} className={classes.input} fullWidth/>
                <TextField id="standard-basic" label="Content" name={'content'} onChange={this.onChangeHandler}
                           value={this.state.content} className={classes.input} fullWidth/>
                <Button type={'submit'} variant="contained" color="primary" className={classes.submitBtn}
                        disabled={Object.values(this.state).includes('')}>Submit</Button>
            </form>
        )
    }
}

export default withStyles(styles)(Form);