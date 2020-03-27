// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class MarketingButton extends Component {

  static slug = 'myex_marketing_button';

  render() {
    const Content = this.props.content;

    return (
      <div class="uad-marketing-button">
      <div class="uad-mbutton-title">
        <h1><Title/></h1>
      </div>
      <div class="uad-mbutton-content"><Content/>
      </div>
      </div>
    );
  }
}

export default MarketingButton;
