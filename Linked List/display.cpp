#include<bits/stdc++.h>
using namespace std;
struct Node {
    int data;
    struct Node *next;
};
struct Node *initialize(){
    struct Node *head = new struct Node;
    cout<<"Enter the data for the first node : ";
    cin>>head->data;
    head->next = NULL;
    return head;
}
struct Node *insertion(struct Node *head){
    if(head==NULL){
        cout<<"Empty Stack"<<endl;
       struct Node *nxt = new struct Node;
       int data;
       cout<<"Enter the data to be inserted : "; 
       cin>>data;
       nxt->data = data;
       nxt->next = NULL;
       head = nxt;
        
       return head;
    }
    struct Node *p = head;
    while(p->next != NULL) p = p->next;
    struct Node *nxt = new struct Node;
    int data;
    cout<<"Enter the data to be inserted : ";
    cin>>data;
    nxt->data = data;
    nxt->next = NULL;
    p->next = nxt;
    return head;
}
void display(struct Node *head){
    while(head != NULL){
        cout<<"The data at the node is :  "<<head->data<<endl;
        head = head->next;
    }
}
int main(){
    cout<<"Initializing the stack";
    struct Node* head = initialize();
    while(true){
        cout<<"Enter your choice : ";
        int cond;
        cin>>cond;
        if(cond == 0) break;
        else if(cond == 1) head = insertion(head);
        else if (cond == 2) display(head);
    }
    display(head);
    return 0;
}