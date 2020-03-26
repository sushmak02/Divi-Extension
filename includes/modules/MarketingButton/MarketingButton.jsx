// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class MarketingButton extends Component {

  static slug = 'myex_marketing_button';

  render() {
    const Content = this.props.content;

    return (
      <h1>
        <Content/>
      </h1>
    );
  }
}

export default MarketingButton;
