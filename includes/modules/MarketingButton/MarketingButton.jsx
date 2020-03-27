// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class MarketingButton extends Component {

  static slug = 'myex_marketing_button';

  render() {
    //const Heading = this.props.heading;
    const Content = this.props.content;

    return (
      <Fragment>
        <div class="uad-marketing-button">
          <div class="uad-mbutton-title">
            <h1>{this.props.heading}</h1>
          </div>
          <div class="uad-mbutton-content">
            <Content/>
          </div>
        </div>
      </Fragment>
    );

  }
}

export default MarketingButton;
