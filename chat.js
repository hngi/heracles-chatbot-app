let trigger = [
    ["hi","hey","hello"], 
    ["how are you", "how is life", "how are things"],
    ["what are you doing", "what is going on"],
    ["how old are you"],
    ["who are you", "are you human", "are you bot", "are you human or bot"],
    ["who created you", "who made you"],
    ["your name please",  "your name", "may i know your name", "what is your name"],
    ["i love you"],
    ["What is the internship about?", "internship","How long is the internship?"],
    ["help me", "I need your help"],
    ["bye", "good bye", "goodbye", "see you later"]
];
let reply = [
    ["Hi","Hey","Hello"], 
    ["Fine", "Pretty well", "Fantastic"],
    ["Nothing much", "Waiting to be of service to you"],
    ["Why do you ask?(I'm a Nigerian Bot by the way, we are known for answering questions with questions)"],
    ["I am just a bot", "I am a bot. What about you?"],
    ["Team Heracles", "HNG Interns"],
    ["Heracles Bot"],
    ["I love you too", "Me too"],
    ["Kindly visit the home page for detailed info about the internship"],
    ["Okay", "What about?"],
    ["Bye", "Goodbye", "See you later"]
];
let alternative = ["I don't really get you...", "I don't have a response for that now, check back some other time..."];
document.querySelector("#input").addEventListener("keypress", function(e){
    let key = e.which || e.keyCode;
    if(key === 13){ //Enter button
        let input = document.getElementById("input").value;
        document.getElementById("user").innerHTML = input;
        output(input);
    }
});
function output(input){
    try{
        var product = input + "=" + eval(input);
    } catch(e){
        let text = (input.toLowerCase()).replace(/[^\w\s\d]/gi, ""); //remove all chars except words, space and 
        text = text.replace(/ a /g, " ").replace(/i feel /g, "").replace(/whats/g, "what is").replace(/please /g, "").replace(/ please/g, "");
        if(compare(trigger, reply, text)){
            var product = compare(trigger, reply, text);
        } else {
            var product = alternative[Math.floor(Math.random()*alternative.length)];
        }
    }
    document.getElementById("chatbot").innerHTML = product;
    speak(product);
    document.getElementById("input").value = ""; //clear input value
}
function compare(arr, array, string){
    let item;
    for(var x=0; x<arr.length; x++){
        for(var y=0; y<array.length; y++){
            if(arr[x][y] == string){
                items = array[x];
                item =  items[Math.floor(Math.random()*items.length)];
            }
        }
    }
    return item;
}

