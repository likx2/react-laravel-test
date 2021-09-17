import createStyles from "@material-ui/core/styles/createStyles";

export const styles = createStyles({
    wrapper: {
        width: '30%',
        padding: '15px',
        border: '2px solid #3f51b5',
        borderRadius: '15px',

    },
    input: {
        display: 'block',
        '&:nth-child(n+2)': {
            margin: '20px 0 0 0',
        },
    },
    
    submitBtn: {
        display: 'block',
        margin: '30px auto 0 auto',
    }
})