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
void insertion(struct Node *&head){
    if(head==NULL){
        cout<<"Empty Stack"<<endl;
       struct Node *nxt = new struct Node;
       int data;
       cout<<"Enter the data to be inserted : "; 
       cin>>data;
       nxt->data = data;
       nxt->next = NULL;
       head = nxt;
       return;
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
}
struct Node *deleten(struct Node *head){
    if(head->next == NULL){
        cout<<"here 1";
        delete head;
        return NULL;
    }
    struct Node *p = head;
    while(p->next->next != NULL) p = p->next;
    struct Node *n = p->next;
    p->next = NULL;
    delete n;
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
        else if(cond == 1) insertion(head);
        else if(cond == 2) head = deleten(head);
        else if (cond == 3) display(head);
    }
    display(head);
    return 0;
}