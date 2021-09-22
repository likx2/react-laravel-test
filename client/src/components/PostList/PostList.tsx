import React, {Component} from "react";
import axios from "axios";

export default class PostList extends Component<any, any> {
    componentDidMount() {
        const fetchData = async () => {
            try {
                // const response = await axios.get(`${process.env.REACT_APP_API_URL}/posts/${this.props.match.params.authorId}`)
                const response = await axios.get(`${process.env.REACT_APP_API_URL}/posts/${this.props.match.params.authorId}`)
                console.log(response)

            } catch (e) {
                throw new Error('Something went wrong')
            }
        }

        fetchData()
    }

    render() {
        return (
            <h1>Post List</h1>
        )
    }
}