import React, { Component } from 'react';
//import logo from './logo.svg';
import './App.css';
import Footer from './components/Footer';

class App extends Component {

  constructor(){
    super();
    this.state = {
      projects:[]
    }
  }
  componentDidMount(){
    let projectsURL = "http://localhost:3000/wp-json/wp/v2/posts";
    fetch(projectsURL)
    .then(response => response.json())
    .then(response =>{
      this.setState({
        projects:response
      })
    })
  }
  render() {
    let projects = this.state.projects.map((project,index) => {
        return (
            <div key={index}>
               <h2>{project.title.rendered}</h2>
               {project.content.rendered}
            </div>
          )
    })
    
    return (
      <div className="App">
        <h1>Projects</h1>
        {projects}
        <Footer />
      </div>
    );
  }
}

export default App;