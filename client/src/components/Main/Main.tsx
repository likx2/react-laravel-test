import React, {Component} from "react";
import {withStyles} from '@material-ui/core/styles';
import {styles} from "./Main.style";

class Main extends Component<any, any> {
    
    render() {
        const {classes} = this.props
        return (
            <div className={classes.main}>
                {this.props.children}
            </div>
        )
    }

}

export default withStyles(styles)(Main);